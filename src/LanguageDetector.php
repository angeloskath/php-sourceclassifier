<?php

use NlpTools\Tokenizers\WhitespaceAndPunctuationTokenizer;
use NlpTools\Models\FeatureBasedNB;
use NlpTools\Classifiers\MultinomialNBClassifier;
use NlpTools\Documents\TokensDocument;
use NlpTools\Documents\TrainingSet;

/**
 * LanguageDetector wraps a simple Naive Bayes classifier to ease
 * its use, its training and its serialization.
 */
class LanguageDetector
{
    protected $tok;
    protected $ff;
    protected $languages;
    protected $model;
    protected $cls;

    public function __construct()
    {
        $this->tok = new WhitespaceAndPunctuationTokenizer();
        $this->ff = new CodeFeatures();
    }

    /**
     * Classify a snippet of source code
     *
     * @param string $code
     */
    public function classify($code)
    {
        if (!$this->cls)
            throw new \RuntimeException("No classification model defined");

        $doc = new TokensDocument($this->tok->tokenize($code));
        return $this->cls->classify($this->languages, $doc);
    }

    /**
     * Classify a file as source code.
     *
     * @param string $f The filename
     */
    public function classifyFile($f)
    {
        if (!file_exists($f))
            throw new \RuntimeException("Can't open file $f");

        return $this->classify(file_get_contents($f));
    }

    /**
     * Train on a directory with the structure explained in function
     * buildTrainingSet
     *
     * @param string $dir
     */
    public function train($dir)
    {
        if (!file_exists($dir) || !is_dir($dir))
            throw new \RuntimeException("Can't find training directory");

        $this->model = new FeatureBasedNB();
        $tset = self::buildTrainingSet($dir);
        $this->languages = $tset->getClassSet();

        $this->model->train($this->ff, $tset);
        $this->cls = new MultinomialNBClassifier($this->ff, $this->model);
    }

    /**
     * Evaluate on a directory with the structure explained in function
     * buildTrainingSet
     *
     * @param  string $dir
     * @return float  The accuracy of the classification
     */
    public function evaluate($dir)
    {
        if (!file_exists($dir) || !is_dir($dir))
            throw new \RuntimeException("Can't find evaluation directory");

        $tset = self::buildTrainingSet($dir);
        $correct = 0;
        foreach ($tset as $class=>$doc) {
            $correct += (int)($this->cls->classify($this->languages, $doc) == $class);
        }
        return $correct / count($tset);
    }

    /**
     * Build a training set from a directory using the following convention:
     * The directory should contain one subdirectory for each class. The class
     * name is the subdirectory's base name. Each subdirectory should contain
     * one file for each document.
     *
     * @param  string      $dir
     * @return TrainingSet
     */
    public static function buildTrainingSet($dir)
    {
        $tok = new WhitespaceAndPunctuationTokenizer();
        $tset = new TrainingSet();
        foreach (new DirectoryIterator($dir) as $d) {
            if ($d->isFile() || $d->isDot())
                continue;

            $class = $d->getBasename();
            foreach (new DirectoryIterator($d->getPathname()) as $f) {
                if (!$f->isFile())
                    continue;

                $tset->addDocument(
                    $class,
                    new TokensDocument(
                        $tok->tokenize(
                            file_get_contents(
                                $f->getPathname()
                            )
                        )
                    )
                );
            }
        }
        return $tset;
    }

    /**
     * The only things to be saved are the languages and the model
     */
    public function __sleep()
    {
        return array('languages','model');
    }

    /**
     * On wakeup rebuild the classifier, feature factory and tokenizer
     */
    public function __wakeup()
    {
        $this->ff = new CodeFeatures();
        $this->tok = new WhitespaceAndPunctuationTokenizer();
        $this->cls = new MultinomialNBClassifier($this->ff, $this->model);
    }

    /**
     * To ensure problem free serialization (especially with utf-8 characters)
     * we encode the serialized object in base64
     *
     * @param  LanguageDetector $instance
     * @return string           The serialized LanguageDetector instance
     */
    public static function serialize(LanguageDetector $instance)
    {
        return base64_encode(serialize($instance));
    }

    /**
     * Decode from base64 and unserialize as usual
     *
     * @param  string $str
     * @return LanguageDetector
     */
    public static function unserialize($str)
    {
        return unserialize(base64_decode($str));
    }

    /**
     * Save the serialized LanguageDetector instance to a file
     *
     * @param LanguageDetector $instance
     * @param string           $file
     */
    public static function saveToFile(LanguageDetector $instance, $file)
    {
        file_put_contents($file, self::serialize($instance));
    }

    /**
     * Load a LanguageDetector instance from a file
     *
     * @param string $file
     */
    public static function loadFromFile($file)
    {
        if (!file_exists($file))
            throw new \RuntimeException("Can't find file");

        return self::unserialize(file_get_contents($file));
    }
}
