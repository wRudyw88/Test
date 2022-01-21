<?php

use PHPUnit\Framework\TestCase;
require 'Berlin_clock.php';

class Berlin_clock_Test extends TestCase
{

    public function testSimplesMinutesDonner0DoitRenvoyernnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(0);

        //Assert
        $this->assertEquals("nnnn", $simpleMinutes);
    }

    public function testSimplesMinutesDonner1DoitRenvoyerjnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(1);

        //Assert
        $this->assertEquals("jnnn", $simpleMinutes);
    }

    public function testSimplesMinutesDonner12DoitRenvoyerjjnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(12);

        //Assert
        $this->assertEquals("jjnn", $simpleMinutes);
    }

    public function testSimplesMinutesDonner23DoitRenvoyerjjjn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(23);

        //Assert
        $this->assertEquals("jjjn", $simpleMinutes);
    }

    public function testSimplesMinutesDonner34DoitRenvoyerjjjj(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(34);

        //Assert
        $this->assertEquals("jjjj", $simpleMinutes);
    }

    public function testSimplesMinutesDonner45DoitRenvoyernnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleMinutes = $berlinClock->simplesMinutes(45);

        //Assert
        $this->assertEquals("nnnn", $simpleMinutes);
    }



    public function testBlocs5MinutesDonner1DoitRenvoyernnnnnnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(1);

        //Assert
        $this->assertEquals("nnnnnnnnnnn", $blocs5Minutes);
    }


    public function testBlocs5MinutesDonner5DoitRenvoyerjnnnnnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(5);

        //Assert
        $this->assertEquals("jnnnnnnnnnn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner11DoitRenvoyerjjnnnnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(11);

        //Assert
        $this->assertEquals("jjnnnnnnnnn", $blocs5Minutes);
    }


    public function testBlocs5MinutesDonner15DoitRenvoyerjjrnnnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(15);

        //Assert
        $this->assertEquals("jjrnnnnnnnn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner22DoitRenvoyerjjrjnnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(22);

        //Assert
        $this->assertEquals("jjrjnnnnnnn", $blocs5Minutes);
    }
    public function testBlocs5MinutesDonner26DoitRenvoyerjjrjjnnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(26);

        //Assert
        $this->assertEquals("jjrjjnnnnnn", $blocs5Minutes);
    }
    public function testBlocs5MinutesDonner33DoitRenvoyerjjrjjrnnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(33);

        //Assert
        $this->assertEquals("jjrjjrnnnnn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner37DoitRenvoyerjjrjjrjnnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(37);

        //Assert
        $this->assertEquals("jjrjjrjnnnn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner44DoitRenvoyerjjrjjrjjnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(44);

        //Assert
        $this->assertEquals("jjrjjrjjnnn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner48DoitRenvoyerjjrjjrjjrnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(48);

        //Assert
        $this->assertEquals("jjrjjrjjrnn", $blocs5Minutes);
    }


    public function testBlocs5MinutesDonner51DoitRenvoyerjjrjjrjjrjn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(51);

        //Assert
        $this->assertEquals("jjrjjrjjrjn", $blocs5Minutes);
    }

    public function testBlocs5MinutesDonner59DoitRenvoyerjjrjjrjjrjj(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Minutes = $berlinClock->blocs5Minutes(59);

        //Assert
        $this->assertEquals("jjrjjrjjrjj", $blocs5Minutes);
    }

    public function testSimplesHeuresDonner1DoitRenvoyerrnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleHeures = $berlinClock->simplesHeures(1);

        //Assert
        $this->assertEquals("rnnn", $simpleHeures);
    }

    public function testSimplesHeuresDonner2DoitRenvoyerrrnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleHeures = $berlinClock->simplesHeures(2);

        //Assert
        $this->assertEquals("rrnn", $simpleHeures);
    }

    public function testSimplesHeuresDonner3DoitRenvoyerrrrn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleHeures = $berlinClock->simplesHeures(3);

        //Assert
        $this->assertEquals("rrrn", $simpleHeures);
    }

    public function testSimplesHeuresDonner4DoitRenvoyerrrrr(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleHeures = $berlinClock->simplesHeures(4);

        //Assert
        $this->assertEquals("rrrr", $simpleHeures);
    }

    public function testBlocs5HeuresDonner0DoitRenvoyernnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(0);

        //Assert
        $this->assertEquals("nnnn", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner2DoitRenvoyernnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(2);

        //Assert
        $this->assertEquals("nnnn", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner7DoitRenvoyerrnnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(7);

        //Assert
        $this->assertEquals("rnnn", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner11DoitRenvoyerrrnn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(11);

        //Assert
        $this->assertEquals("rrnn", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner15DoitRenvoyerrrrn(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(15);

        //Assert
        $this->assertEquals("rrrn", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner22DoitRenvoyerrrrr(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(22);

        //Assert
        $this->assertEquals("rrrr", $blocs5Heures);
    }

    public function testBlocs5HeuresDonner23DoitRenvoyerrrrr(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $blocs5Heures = $berlinClock->blocs5Heures(23);

        //Assert
        $this->assertEquals("rrrr", $blocs5Heures);
    }

    public function testSimpleSecondesDonner0DoitRenvoyerr(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleSecondes = $berlinClock->simpleSecondes(0);

        //Assert
        $this->assertEquals("r", $simpleSecondes);
    }

    public function testSimpleSecondesDonner3DoitRenvoyern(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $simpleSecondes = $berlinClock->simpleSecondes(3);

        //Assert
        $this->assertEquals("n", $simpleSecondes);
    }

   public function testHorlogeEntiereDonner12h56m01s(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $horlogeEntiere = $berlinClock->horlogeEntiere(12,56,1);

        //Assert
        $this->assertEquals("n\nrrnn\nrrnn\njjrjjrjjrjj\njnnn" , $horlogeEntiere);
    }

    public function testHorlogeEntiereDonner00h00m00s(){
        // Arrange
        $berlinClock = new Berlin_clock();

        // Act
        $horlogeEntiere = $berlinClock->horlogeEntiere(0,0,0);

        //Assert
        $this->assertEquals("r\nnnnn\nnnnn\nnnnnnnnnnnn\nnnnn" , $horlogeEntiere);
    }




}


?>