# BKubicki Magento 2 Polish nouns numeral declension adapter

## Overview
Magento 2 adapter for library [bkubicki/magento2-polish-noun-numeral-declination-adapter](https://github.com/bartoszkubicki/polish-noun-numeral-declension)

## Usage
`__p` returns phrase with count argument. If we have all strings in store in english and we translate them onto other languages (as we should),
for words that needs numeral declension, we should provide distinctive strings even in english, so translation will pick
proper declension in polish. For example for word comment:

For en_US.csv:
```
"comment","comment"
"comments","comments"
"comments-g","comments"
```

For pl_PL.csv it should look like:
```
"comment","komentarz"
"comments","komentarzy"
"comments-g","komentarze"
```

and in phtml usage will be like
```
<?= __p($count, 'comment', 'comments', 'comments-g') ?>
```

Drawback of this approach may be necessity of keeping en_US translation, but magento provides it out of the box.
Although, special, numeral noun declension doesn't seem to be common and will be used only from time to time.

## Prerequisites
* Magento 2.2/2.3+
* PHP 7.2/7.3


## Installation ###

To install the extension use the following commands:

```bash
 composer require bkubicki/magento2-polish-noun-numeral-declination-adapter
```


## Tests ##

### Unit ###
1. Run command
```
./vendor/bin/phpunit -c phpunit.xml --testsuite "Unit" --coverage-html coverage/coverage-html --colors=always
```

2. You can also use some alias:
  - `test-unit-coverage` - _`vendor/bin/phpunit -c phpunit.xml --testsuite "Unit" --coverage-html coverage/coverage-html --colors=always`_

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/bartoszkubicki/magento2-polish-noun-numeral-declension-adapter/tags).


## Authors

* [Bartosz Kubicki](https://github.com/bartoszkubicki)


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.