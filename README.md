Parameter To SpeakingUrl
========================

## TYPO3 Extension `parameter_to_speakingurl`

This extension provides a middleware to redirect urls containing parameter(s) `id`, `type` and `L` or `language` to
the speaking url. You cannot control what external services, pages or search results have linked, you can use this
extension to redirect them to the correct speaking url.

|                  | URL                                                              |
|------------------|------------------------------------------------------------------|
| **Repository:**  | https://github.com/sbuerk/t3e-parameter-to-speakingurl           |
| **Read online:** | -                                                                |
| **TER:**         | https://extensions.typo3.org/extension/parameter_to_speakingurl/ |

## Compatibility

| Version  | TYPO3   | PHP       | Support / Development                |
|----------|---------|-----------|--------------------------------------|
| dev-main | 11 - 12 | 7.4 - 8.2 | unstable development branch          |
| 1.x      | 11 - 12 | 7.4 - 8.2 | features, bugfixes, security updates |

| Branch   | Version                                   | Status                                                                                                                                                                                                   |
|----------|-------------------------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| dev-main | 11 + typo3/cms-composer-installers 3.x    | [![tests11i3](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests11i3.yml/badge.svg)](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests11i3.yml) |
| dev-main | 11 + typo3/cms-composer-installers 4.0RC1 | [![tests11i3](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests11i3.yml/badge.svg)](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests11i3.yml) |
| dev-main | 12 + typo3/cms-composer-installers 5      | [![tests12](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests12.yml/badge.svg)](https://github.com/sbuerk/t3e-parameter-to-speakingurl/actions/workflows/tests12.yml)       |

## Maintainer

* Stefan Bürk: stefan@buerk.tech

## TYPO3 `Build/Scripts/runTests.sh`

This extension contains the well known `Build/Scripts/runTests.sh` docker/docker-compose based script wrapping script.

Provided commands/test-suits:

* `-s clean`: Clean unnecessary files and folders
* `-s cgl`: Ensure code-style guideline rules.
* `-s composerUpdate`: Run composer update
* `-s composerValidate`: Validate composer.json
* `-s functional`: Execute functional tests
* `-s lint`: Lint `*.php` files for syntax errors
* `-s phpstan`: Execute static code analyzer PHPStan
* `-s phpstanGenerateBaseline`: Generate baseline for PHPStan. Can be used to manage temporarily unsolvable reports.
