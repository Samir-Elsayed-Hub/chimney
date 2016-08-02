### 1.1.0-beta2 - 2016-08-02

  * Fix broken git hints.

### 1.1.0-beta1 - 2016-07-22

  * Added option to allow major releases. By default only minor and patch ones are possible.
  * Added post-run scripts with placeholders (so the "Chimney" step of Contnious Delivery can be fully automated).
  * Added incrementing minor and major versions.
  * Updated plista-dataeng/updep updated from 1.2.0-rc1 to 1.2.0.
  * Fixed tags might be extracted with a hash appended.

### 1.0.0-alpha6 - 2016-07-12

  * Release suppport for CHANGELOG.md .
  * This section was created with help of Plista Chimney.

### 1.0.0-alpha5 - 2016-07-12

  * Added some more description to README.
  * Fixed attempt to create a changelog when the requested git log is empty [#1].
  * Introduced predefined exit codes.
  * Improved the hint with git commands for debian release [#5] [#6].
  * Fixed the latest tag is not obtained correctly through all branches [#4].
  * Fixed wrongly set composer package name to plista-dataeng/chimney.
  * Made composer.json conform Packagist standards.
  * README updates.

### 1.0.0-alpha4 - 2016-07-08

  * Removed Chimney UpDep "bin/updep.sh" shortcut and updated the dependency.

### 1.0.0-alpha3 - 2016-07-05

  * Fixed mistakes in README.md.

### 1.0.0-alpha2 - 2016-07-05

  * Plista UpDep is now included and can be run from bin/updep.sh.
  * Readme and usage information.
  * Updated project's dependencies.

### 1.0.0-alpha1 - 2016-07-05

  * Initial release