<?php

// Selfwork PHP 6
// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".



for ($i=1; $i <= 100 ; $i++) { 
    
    switch (true) {
        case $i % 3 == 0 && $i % 5 == 0 :
            echo "“HACKADEMY" . "\n" ;
            break;
            case $i % 5 == 0 :
                echo "JAVASCRIPT" . "\n";
                break;
                case $i % 3 == 0 :
                    echo "PHP" . "\n";
                    break;
                    
                    default:
                    echo $i . "\n";
                    break;
                }
                               
            };

// carico esercizio completo
            


            