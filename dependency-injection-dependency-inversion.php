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