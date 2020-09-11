### ASTRONAUT

#### Create a new Astronaut
```
$astronaut = new Astronaut();
$astronaut = $astronaut->make_astronaut('John Glenn', 5.673);
```

#### Add to the Astronaut's weight
```
$new_weight = $astronaut->add_weight_to_astronaut(0.001);
```

#### Launch the Astronaut
```
$launch = $astronaut->launch_astronaut();
```

### How to Test
Ensure you're in the root directory. `question_two/` then run:
```
php ./vendor/bin/phpunit tests/
```