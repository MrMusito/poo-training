<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                     function var_dumb($var) {
                        echo "<pre>", var_dump($var), "</pre>";
                    }
                    class Student {
                        private string $lastname;
                        private string $firstname;
                        public DateTime $birthdate;
                        public string $grade;
                        public string $school;

                        public function __construct(string $lastname, string $firstname, DateTime $birthdate, string $grade, string $school) {
                            $this->lastname =  $lastname;
                            $this->firstname =  $firstname;
                            $this->birthdate = $birthdate;
                            $this->grade = $grade;
                            $this->school = $school;
                        }

                        public function getLastName():string {
                            return $this->lastname;
                        }
                        public function getFirstName():string {
                            return $this->firstname;
                        }
                        public function getBirthdate():DateTime {
                            return $this->birthdate;
                        }
                        public function getGrade():string {
                            return $this->grade;
                        }
                        public function getSchool():string {
                            return $this->school;
                        }

                        public function setLastName(string $lastname):void {
                            $this->lastname = $lastname;
                        }
                        public function setFirstname(string $firstname):void {
                            $this->firstname = $firstname;
                        }
                        public function setBirthdate(DateTime $birhtdate):void {
                            $this->birthdate = $birhtdate;
                        }
                        public function setGrade(string $grade):void {
                            $this->grade = $grade;
                        }
                        public function setSchool(string $school):void {
                            $this->school = $school;
                        }
                        public function getAge():int {
                            return $this->birthdate->diff(new DateTime())->format("%y");
                        }
                        public function getText():string {
                            return "Bonjour, je m'appelle ".$this->getfirstname()." j'ai ".$this->getAge()." ans et je vais à l'école ".$this->getSchool()." en class de ".$this->getGrade().".";
                        }
                    }
                    $student1 = new Student("Mike", "Westen", new DateTime("2000-02-02"), "1er", "Lycée Marcel Pagnol");
                    $student2 = new Student("Kelly", "Pen", new DateTime("1999-03-03"), "terminal", "Lycée Jean Monet");
                    var_dumb($student1);
                    var_dumb($student2);
                ?>
            </div>
        </section>
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
                <?php
                $student1->setGrade("2de");
                $student2->setGrade("3em");
                echo $student1->getGrade();
                echo $student2->getGrade();
                // var_dumb($student1->setGrade("2de"));
                // var_dumb($student2->setGrade("3em"));
                ?>
            </div>
        </section>
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
                <?php
                   var_dumb($student1->getBirthdate());
                   var_dumb($student2->getBirthdate());
                ?>
            </div>
        </section>
        
        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                    echo $student1->getAge()."<br>";
                    echo $student2->getAge();
                ?>
            </div>
        </section>
        
        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                    echo $student1->getSchool();
                    echo $student2->getSchool();
                ?>
            </div>
        </section>
        
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                    echo $student1->getText();
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>