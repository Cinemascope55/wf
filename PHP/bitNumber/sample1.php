<?php
// Exercise "how many bit in number"

// Start a function
        function bitInANumber (int $number ) :int {
            // Create variable "counter" as 0
            $counter = 0;
            // Create variable "compare" as 0
            $compare = 1;
            // while the "compare" variable is lesser than "number"
            while ($compare < $number) {
            // increment "counter"
                $counter++;
            }
            // Return "counter"
            Return $counter;
        }
        // Given we have one integer argument "number"

        //