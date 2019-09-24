<?php

$db = new db(); //instantiate DB connection

$mode = new UserModel($db); //pass the DB connection in

# Dependency Injection is basically "injecting dependency" instead of creating an object inside
//without dependency injection, you will end up with many DB instantiations everywhere
//* de-coupling : $mode doesn't care now DB connection is created.
//It just needs DB connection. (it's different from encapsulation because I, as a developer should now how UserModel works.)
//* Makes our code DRY
//* It makes unit testing possible
//* It makes the code more maintainable.
//* It breaks encapsulation. It's harder to read.
//* It's more work for developers. (ie. You need to create all the other stuff to make UserModel object)


# Dependency Inversion
//Don't type hint with class name. Type hint with abstract
/*
 * abstract class animal {}

class chicken extends animal {

}

class cow extends animal {

}

class farmer {

}

class barn {
    public $animals;

    public function addAnimal(animal $animal) {
        $this->animals[] = $animal;
    }
}
 *
 * */

# Factory pattern solves the problems Dependency Injection has.
// A Factory is generally an object which knows how to instantiate other objects for you.
// You tell Factory to "give me UserModel", and the Factory goes and gets all the dependencies UserModel needs and return it to you. (I don't have to pass anything in UserModel)
// Every time you create a class that has dependency, you create a Factory too.
// It achieves encapsulation. For me, I don't need to know what factory does as long as it does what it's supposed to do.
// Factory is not gonna follow the rule of Dependency Injection (it will instantiate objects inside) to help us get Dependency Injection.
// Factory should be something I can run. (ie. named function, or class)
// Different Frameworks have different opinions over Factory



