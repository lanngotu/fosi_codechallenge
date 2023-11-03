# Fosi Code Challenge
> No errors, just pure functionalities
> 
> No Live demo
>
> ## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Setup](#setup)
* [Usage](#usage)
* [Contact](#contact)

## General Information
- PHP Code Challenge

A left rotation operation on an array shifts each of the array's elements 1 unit to the left. For example, if 2 left rotations are performed on array [1,2,3,4,5], then the array would become [3,4,5,1,2]. Note that the lowest index item moves to the highest index in a rotation. This is called a circular array.
Given an array a of n integers and a number, d , perform d left rotations on the array. Return the updated array to be printed as a single line of space-separated integers.
- Function Description

Complete the function rotLeft.
rotLeft has the following parameter(s):
int a[n]: the array to rotate
int d: the number of rotations
Returns
int a'[n]: the rotated array
- For Examples

Input Format
The first line contains two space-separated integers n and d , the size of a and the number of left rotations.
The second line contains n space-separated integers, each an a[i].
Sample Input
5 4
1 2 3 4 5
Sample Output
5 1 2 3 4
Explanation
When we perform d=4 left rotations, the array undergoes the following sequence of changes:
[1,2,3,4,5] -> [2,3,4,5,1] -> [3,4,5,1,2] -> [4,5,1,2,3] -> [5,1,2,3,4]
## Technologies Used
- PHP with PHP UnitTest
- Composer
## Setup
- Clone SoureCode `git clone https://github.com/lanngotu/fosi_codechallenge.git`
- Run `composer install`

## Usage
Run it on terminal (or command line) `./vendor/bin/phpunit --verbose -debug tests`

## Contact
Created by [BloodTear] ngotulan@gmail.com - Thank for contact me

<!-- You don't have to answer all the questions - just the ones relevant to your project. -->
