<?php
    require_once("model/Book.php");

    class Model {
        public function getBookList() {
            return array(
                "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
                "Moonwalker" => new Book("Moonwalker", "J. Walker", "Simple Java Book for Students."),
                "PHP for Dummies" => new Book("PHP for Dummies", "Smart Guy", "My favorit book."),
                "PHP Edisi Lengkap" => new Book("PHP Edisi Lengkap", "Jubilee Enterprise", "PHP dari dasar hingga pemrograman web berbasis database."),
                "Pro PHP MVC" => new Book("Pro PHP MVC", "Chris Pitt", "Model View Controller Archtecture-Driven Application Development."),
                "To Kill a Mockingbird" => new Book("To Kill a Mockingbird", "Harper Lee", "Deskripsi: Sebuah kisah tentang keadilan dan ketidakadilan di sebuah kota kecil di Alabama pada tahun 1930-an."),
                "Clean Code: A Handbook of Agile Software Craftsmanship" => new Book("Clean Code: A Handbook of Agile Software Craftsmanship", "Robert C. Martin", "Kualitas kode untuk perangkat lunak yang mudah dipelihara."),
                "Eloquent JavaScript: A Modern Introduction to Programming" => new Book("Eloquent JavaScript: A Modern Introduction to Programming", "Marijn Haverbeke", "Pengantar lengkap tentang bahasa pemrograman JavaScript modern."),
                "Python Crash Course" => new Book("Python Crash Course", "Eric Matthes", "Mempercepat pembelajaran Python dari dasar hingga aplikasi kompleks."),
                "The Pragmatic Programmer" => new Book("The Pragmatic Programmer", "Andrew Hunt, David Thomas", "Wawasan praktis menjadi programmer yang efisien dan terampil."),
                "Eloquent JavaScript" => new Book("Eloquent JavaScript", "Marijn Haverbeke", "Pengantar modern tentang pemrograman JavaScript."),
                "Python Crash Course" => new Book("Python Crash Course", " Eric Matthes", "Pembelajaran cepat Python dari dasar hingga aplikasi kompleks."),
                "Head First Design Patterns" => new Book("Head First Design Patterns", "Eric Freeman, Elisabeth Robson, Bert Bates, Kathy Sierra", "Panduan praktis untuk memahami pola desain perangkat lunak."),
            );
        }

        public function getBook($title) {
            $allBooks = $this->getBookList();
            return $allBooks[$title];
        }
    }
?>