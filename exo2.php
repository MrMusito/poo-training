<?php
    function var_dumb($var) {
        echo "<pre>", var_dump($var), "</pre>";
    }
    class Teacher {
        private string $firstname;
        private string $lastname;
        private array $subjects;
        private string $school;

        public function __construct(string $firstname, string $lastname, array $subjects = [], string $school = "") {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->subjects = $subjects;
            $this->school = $school;
        }

        // SETTERS AND GETTERS

        public function setLastname(string $lastname):void {
            $this->lastname = $lastname;
        }
        public function getLastname():string {
            return $this->lastname;
        }

        public function setFirstname(string $firstname):void {
            $this->firstname = $firstname;
        }
        public function getFirstname():string {
            return $this->firstname;
        }

        public function setSubjects(array $subjects):void {
            $this->subjects = $subjects;
        }
        public function getSubjects():array {
            return $this->subjects;
        }

        public function setSchool(string $school):void {
            $this->school = $school;
        }
        public function getSchool():string {
            return $this->school;
        }

        // METHODS

        public function addSubject(string $subject):void {
            if(in_array($subject, $this->subjects)) return;
            $this->subjects[] = $subject;
        }

        public function removeSubject(string $subject):void {
            $this->subjects = array_filter($this->subjects, fn ($s) => $s !== $subject);
        }

        public function getSubjectToString():string {
            return implode(', ', $this->getSubjects());
        }

        public function introduceMyself():string {
            $replace = [
                "firstname" => $this->getFirstname(),
                "lastname" => $this->getLastname(),
                "school" => $this->getSchool(),
                "subjects" => $this->getSubjectToString()
            ];
            $template = "Greetings my name is ##firstname## ##lastname## and I teach at the ##school## where I teach the following subjects: ##subjects##";
            return str_replace(array_map(fn ($v) => "##$v##", array_keys($replace)), array_values($replace), $template);
        }
    }

    $teacher1 = new Teacher("Alaska", "5000");
    $teacher2 = new Teacher("Willam", "Belli");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des professeurs</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">POO - Des professeurs</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link active">Des profs</a></li>
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
                Créer une classe permettant de créer des professeurs ayant un nom, un prénom, une liste des matières qu'il enseigne et le nom de l'école où il enseigne.
                <br>
                Définir toutes les propriétés à l'instanciation en rendant la liste des matières et le nom de lécole faculative.
                <br>
                Créer 2 professeurs différents.
            </p>
            <div class="exercice-sandbox">
                <?php
                    var_dumb($teacher1);
                    var_dumb($teacher2);
                ?>
            </div>
        </section>
        
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de gérer toutes les propriétés des professeurs.
                <br>
                Modifier les écoles des 2 professeurs.
                <br>
                Afficher les écoles des 2 professeurs.
            </p>
            <div class="exercice-sandbox">
                <?php
                    $teacher1->setSchool("University of Drag");
                    $teacher2->setSchool("School of Drag");
                    echo $teacher1->getFirstname().": ".$teacher1->getSchool()."<br>";
                    echo $teacher2->getFirstname().": ".$teacher2->getSchool();
                ?>
            </div>
        </section>
        
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Créer les méthodes permettant d'ajouter une matière, de retirer une matière et d'afficher la liste des matières d'un prof.
                <br>
                Tester l'ajout, la suppression et l'affichage sur chacun des profs.
            </p>
            <div class="exercice-sandbox">
                <?php
                    $teacher1->addSubject("Hair & Makeup");
                    $teacher1->addSubject("Nails and Lipsync");
                    $teacher1->addSubject("Padding");
                    var_dumb($teacher1->getSubjects());
                    $teacher1->removeSubject("Padding");
                    var_dumb($teacher1->getSubjects());
                    echo $teacher1->getFirstname().": ".$teacher1->getsubjectToString().".";

                ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux professeurs de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX et j'enseigne à l'école XXX les matières suivantes : XXX, XXX, XXX.".
                <br>
                Afficher la phrase de présentation des 2 profs.
            </p>
            <div class="exercice-sandbox">
                <?php
                    echo $teacher1->introduceMyself();
                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>