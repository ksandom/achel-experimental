# Big-O

Recently I tried to explain bigO notation to someone, and I didn't do a very good job. It seemed time to fix that.

Have a go at generating approximate big O notation for any given feature.

## Assumptions

While it should be doable to calculate Achel code with reasonable certainty, as soon as we get to the parent language code, guesses have to be made.

## Notation examples to reference


### Raw examples
#### You had one job!

Does one thing and exits

    pass

notation

    O(1)

#### One iteration

Iterate through every value once.

    loop
        pass

notation

    O(N)

#### One level of nesting

Iterate inside a nested loop

    loop Thing1,
        loop Thing2,
            test

notation

    O(N^2)

### Bringing it together

An actual nested loop

    loop Thing1,
        getCategory Thing1
        loop Thing2,
            debug 0,~!Thing2,line!~

notation

    

Assumptions

* `debug` is I(1). In reality, it's a bit more than that.
