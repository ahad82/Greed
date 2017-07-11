# Greed
http://codingdojo.org/kata/Greed/
http://en.wikipedia.org/wiki/Greed_%28dice_game%29

Greed (Dice Game)
`index.php` is the main file where the input can be modified or provided. Right now a proper interface is missing to provide input data.

## Design
- For each rule i have defined a class as `Single`, `Pair`, `Tripple` etc, which are all inherited from `BaseScore` class.
- Factory pattern is used to pick up rules class using `RulesFactory` class
- `Greed` class is the main controller which is responsible for using the factory and all the required objects.

## Business case/rules

- A single one (100)
- A single five (50)
- Triple ones [1,1,1] (1000)
- Triple twos [2,2,2] (200)
- Triple threes [3,3,3] (300)
- Triple fours [4,4,4] (400)
- Triple fives [5,5,5] (500)
- Triple sixes [6,6,6] (600)
- Note that the scorer should work for any number of dice up to 6.

- Four-of-a-kind (Multiply Triple Score by 2)
- Five-of-a-kind (Multiply Triple Score by 4)
- Six-of-a-kind (Multiply Triple Score by 8)

- Three Pairs [2,2,3,3,4,4] (800)

- Straight [1,2,3,4,5,6] (1200)
