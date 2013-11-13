LanguageDetector
================

LanguageDetector is an implementation of [sourceclassifier][ruby_source_classifier] in
PHP using [NlpTools][nlp_tools].

LanguageDetector detects the programming language of a source code using a Naive Bayes
model. The pre trained provided model recognizes **C, C#, C++, Clojure, Go, Haskell, Java,
Javascript, MATLAB, Pascal, Perl, PHP, Python, Ruby, Scala, Visual Basic**.

You can read a [blog post][lang_detect_post] about it.

Usage
------

``` php
include ("vendor/autoload.php");

$detector = LanguageDetector::loadFromFile("model");

$lang = $detector->classify(<<<CODE
#include <stdio.h>

int main() {
	printf("Hello world");
}
CODE
);

echo $lang; // C

$lang = $detector->classify(<<<CODE
def hello():
	print "Hello world"
hello()
CODE
);

echo $lang; // Python
```

[ruby_source_classifier]: https://github.com/chrislo/sourceclassifier
[nlp_tools]: https://github.com/angeloskath/php-nlp-tools
[lang_detect_post]: http://php-nlp-tools.com/posts/programming-language-detection.html
