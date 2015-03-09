# Starter/Leaver Submission Form

This form is used to inform IT department about new starters and leavers. The form itself is very basic, parts of it
are generated with help of PHP. Form is processed by the PHP script that constructs email body from the supplied and then sends email to the preconfigured email address. Email body is constructed in such a way so that it appears as table when processed by Jira.

### Version
0.000000001

### Libraries
* [PHPMailer] - A full-featured email creation and transfer class for PHP.
* [Pure.css] - A set of small, responsive CSS modules.

### Installation
```sh
$ git clone https://github.com/ivanovedgar/form.git
```
PHPMailer library is required in order to successfully send email, you can initialise it by issuig following commands:

```sh
$ cd form
$ git submodule init
$ git submodule update
```
 
Alternatively you can download [PHPMailer] source and place it inside projects lib folder

###Configuration
PHPMailer uses email server to send emails. Email server setting must be specified in the config.php file. For complete set of properties check out official API at http://phpmailer.github.io/PHPMailer/classes/PHPMailer.html

### Todo's

 - Write Tests
 - Add data validation

License
----

MIT

The MIT License (MIT)

Copyright (c) <2015> <Edgar Ivanov>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

[PHPMailer]:https://github.com/PHPMailer/PHPMailer
[Pure.css]:https://github.com/yahoo/pure/