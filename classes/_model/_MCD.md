
Convention name :
 Class : PascalCase 
 Functions : camelCase
 variable : snake_case
 MCD draw : https://www.drawio.com
 


Class LibraryItem (Document)--->Parent
    - reference (numéro interne)
    - title
    - author
    - description
    - publisher
    - ISBN (13 chiffres  ex 978-2-7654-1005-8)
    - type  (support : papier - numérique )
    - realease_date (datetime)
    - status (in house -  borrowed - not available  )
    - is_borrowable ( True - False)
    - loan_date   (datetime)
    - return_date (datetime)


Class Library ---->Parent 
    - name
    - city
    - city_code
    - policy (ToDo array of options??)

        Class Book  ---> child of LibraryItem (Document)
            - genre  (manga,novel, BD,press, comics,ci-fi,romance,crime,horror,education, science etc...) 
            - number_Of_pages
            - synopsis

        Class Media ---> child of LibraryItem (Document)
            - category (CD - DVD)
            - content (audio - video - mixed)
            - duration (length in minutes)


Class Person---->Parent 
    - firstname
    - lastname
    - date_of_birth
    - occupation
    - email
    - phone
    - city
    - city_code
    - gender (male -female - neuter)

            Class Borrower ---> child of Person
                    - items_borrowed
                    - closest_due_date
                    







