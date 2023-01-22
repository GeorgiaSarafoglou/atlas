<?php
    $delimiter = '?';
    
    $current_page = basename($_SERVER['PHP_SELF']);
    $temp_current = explode($delimiter, $current_page);
    $current_page = $temp_current[0];

    $previous_page = basename($_SERVER['HTTP_REFERER']);
    $temp = explode($delimiter, $previous_page);
    $previous_page = $temp[0];
    
    switch ($current_page) {
        case 'index.php':
            $breadcrumb = '';
            break;
        case 'startingpage-student.php':
            $breadcrumb = '';
            break;
        case 'office-student.php':
            $breadcrumb = '';
            break;
        case 'search.php':
            $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής';
            break;
        case 'job-details.php':
            $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής > Λεπτομέρειες Θέσης';
            break;
        case 'my-applications.php':
            $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αιτήσεις';
            break;
        case 'favorites.php':
            if($previous_page == 'job-details.php'){
                $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής > Λεπτομέρειες Θέσης > Αγαπημένα';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Αγαπημένα';
            }
            break;
        case 'saved-applications.php':
            if($previous_page == 'job-details.php'){
                $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής > Λεπτομέρειες Θέσης > Αποθηκευμένες Αιτήσεις';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Αποθηκευμένες Αιτήσεις';
            }
            break;
        case 'pending-applications.php':
            if($previous_page == 'job-details.php'){
                $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής > Λεπτομέρειες Θέσης > Εκκρεμείς Αιτήσεις';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις';
            }
            break;
        case 'accepted-applications.php':
            $breadcrumb = 'Αρχική Σελίδα > Εγκεκριμένες Αιτήσεις';
            break;
        case 'rejected-applications.php':
            $breadcrumb = 'Αρχική Σελίδα > Απορριφθείσες Αιτήσεις';
            break;
        default:
            $breadcrumb = '';
    }

    //echo $previous_page. '>' .$current_page;
    echo $breadcrumb;
?>