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
require_once 'MontyHall.php';
```

### Use the MontyHall Simulation

```
<?php
$montyhall = new MontyHall();
$montyhall->setDoors(3)->play(10000)->getResults();
?>
```