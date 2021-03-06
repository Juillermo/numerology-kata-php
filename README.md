# numerology kata

## Step 1
Welcome to Numerology!

Numerology is the leading Number Processing company in Numberland, and you are
starting out as a new recruit in the Prestigeous First Array Processing Unit, 
Subdivision Integer numbers.

In order to prepare the new recruits, Numerology regularly gives the recruits
problems to work on. 

For the first task, you will implement a number replacer which replaces all 
9's by two tens.

As in the example below:

>  input: 1,2,3,4,5,6,7,8,9,10
>
>  output: 1,2,3,4,5,6,7,8,10,10,10

## Step 2
For the next task, you will extend the functionality by replacing all 2's
by an equal amount of ones as the number to the left of the 2, and all 6's by
an equal amount of 3's as the value of the number which is an equal amount of
steps to the right of the 6 as the number which is to the immediate left of it.

As in the examples below

> input: 3,2,3,4,5
>
> output: 3,1,1,1,3,4,5

> input: 1,6,3,4,5
>
> output: 1,3,3,3,3,4,5

#Step 3
For the next task, you will extend the functionality by adding the ability to 
replace any 3 by a 5 if not immediately succeeded by 5 and any 4 by a 3 if not 
immediately preceeded by 5. When replacing the 3's and 4's, you may not replace
more than one 3 or 4 in a go without having replaced one instance of the other
in between. When four 3's have been replaced, and three 4's have been replaced.
No more replacements may occur until a 7 is seen. Once a 7 is seen, the whole
process is reset and four 3's and three 4's may be replaced again.

As in the examples below

>  input: 3,5
>
>  output: 3,5

>  input: 3,15
>
>  output: 5,15

>  input: 5,4
>
>  output: 5,4

>  input: 15,4
>
>  output: 15,3
  
# Step 4

For the next task , you will extend the functionality by replacing the last
integer in the input sequence by the lowest next odd number if not already
odd, when the first number in the input sequence is not even. The mutation of
the last integer happens after all other rules have been applied, with the 
basis of the premise from the pristine unmutated version of the first integer
in the series as it was before any rules where applied to mutate the sequence
of numbers.

As in the examples below

>  input: 1,11,10
>
>  output: 1,11,9

>  input: 1,11,9
>
>  output: 1,11,9

>  input: 12,11,10
>
>  output: 12,11,10

# Step 5

For the next task, you will extend the functionality by replacing the last
integer in the presented input sequence by the immediately ascending successive
even integer, if not already even, under the precondition that the inital 
integer in the sequence is not odd. This rule is applied at the end after all
other rules, and only to be applied in a circumstance where the sequence as
presented to the program without any rules applied has an even integer as the
first number.

As in the examples below

>  input: 12,17,5
>
>  output: 12,17,6
  
>  input: 12,17,12
>
> output: 12,17,12

Created by [Matteo Vaccari](http://matteo.vaccari.name/).

## License

Copyright © 2017 FIXME

Distributed under the Eclipse Public License either version 1.0 or (at
your option) any later version.
