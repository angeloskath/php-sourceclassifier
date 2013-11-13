<?php

use NlpTools\FeatureFactories\FeatureFactoryInterface;
use NlpTools\Documents\DocumentInterface;

/**
 * CodeFeatures implements features used for recognizing a
 * programming language. It currently implements a simple
 * token frequency feature with maximum frequency cutoff at 4.
 */
class CodeFeatures implements FeatureFactoryInterface
{
    public function getFeatureArray($class, DocumentInterface $doc)
    {
        $tokens = $doc->getDocumentData();
        $tokens = array_count_values($tokens);

        foreach ($tokens as $tok=>&$v) {
            $v = min($v,4);
        }

        return $tokens;
    }
}
