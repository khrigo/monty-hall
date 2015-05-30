# Monty Hall problem simulation

This PHP class simulates the Monty Hall problem: http://en.wikipedia.org/wiki/Monty_Hall_problem

The Monty Hall problem is a counter intuitive problem in probability mathematics that deals with picking the right prize from a set of three doors. The problem is named after the television celebrity Monty Hall and is loosely based on the USA game show Let's Make a Deal.

## Installation

### Clone the repository

```
git clone https://github.com/khrigo/monty-hall.git
```

### Initializing class

```
require_once 'class/MontyHall.php';
```

### Use the Monty Hall Simulation

```
$montyhall = new MontyHall();
$montyhall->setDoors(3)->play(10000)->getResults();
```
## Licensing
[The MIT License (MIT)](https://github.com/khrigo/TrueOrFalseColor/blob/master/LICENSE)

Copyright (c) 2015 Igor Khripchenko

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
