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
            if($previous_page == 'job-details.php'){
                $breadcrumb = 'Αρχική Σελίδα > Θέσεις Πρακτικής > Λεπτομέρειες Θέσης > Αγαπημένα';
            }
            else if($previous_page == 'watch-jobs.php'){
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αγγελίες > Λεπτομέρειες Θέσης';
            }
            else if($previous_page == 'watch-jobs-temp.php'){
                $breadcrumb = 'Αρχική Σελίδα > Προσωρινές Αγγελίες > Λεπτομέρειες Θέσης';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Αγαπημένα';
            }
            break;

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
            else if($previous_page == 'update-application.php'){
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
        case 'update-application.php':
            if($previous_page == 'saved-applications'){
                $breadcrumb = 'Αρχική Σελίδα > Αποθηκευμένες Αιτήσεις > Επεξεργασία Αίτησης';
            }
            else if($previous_page == 'my-applications.php'){
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αιτήσεις > Επεξεργασία Αίτησης';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Επεξεργασία Αίτησης';
            }
            break;
        case 'create-job-offer.php':
            $breadcrumb = 'Αρχική Σελίδα > Δημιουργία Αγγελίας';
            break;
        case 'watch-jobs-temp.php':
            if($previous_page == 'create-job-offer.php'){
                $breadcrumb = 'Αρχική Σελίδα > Δημιουργία Αγγελίας > Προσωρινά Αποθηκευμένες Αγγελίες';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Προσωρινά Αποθηκευμένες Αγγελίες';
            }
            break;
        case 'watch-jobs-active.php':
            if($previous_page == 'create-job-offer.php'){
                $breadcrumb = 'Αρχική Σελίδα > Δημιουργία Αγγελίας > Προσωρινά Αποθηκευμένες Αγγελίες';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Ενεργές Αγγελίες';
            }
            break;
        case 'edit-job.php':
            if($previous_page == 'watch-jobs-temp.php'){
                $breadcrumb = 'Αρχική Σελίδα > Προσωρινά Αποθηκευμένες Αγγελίες > Επεξεργασία Αγγελίας';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Προσωρινά Αποθηκευμένες Αγγελίες';
            }
            break;
        case 'watch-jobs.php':
            if($previous_page == 'watch-jobs.php'){
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αγγελίες > ';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αγγελίες';
            }
            break;

        case 'jobs-pending.php':
            $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις ';
            break;
        case 'jobs-rejected.php':
            $breadcrumb = 'Αρχική Σελίδα > Απορριφθείσες Αιτήσεις ';
            break;
        case 'jobs-approved.php':
            $breadcrumb = 'Αρχική Σελίδα > Εγκεκριμένες Αιτήσεις ';
            break;
        case 'jobs-all.php':
            $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αιτήσεις ';
            break;
        case 'job-interest-details.php':
            if($previous_page == 'jobs-all.php'){
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αιτήσεις > Λεπτομέρειες Αίτησης';
            }
            else if($previous_page == 'jobs-pending.php'){
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις > Λεπτομέρειες Αίτησης';
            }
            else if($previous_page == 'jobs-approved.php'){
                $breadcrumb = 'Αρχική Σελίδα > Εγκεκριμένες Αιτήσεις > Λεπτομέρειες Αίτησης';
            }
            else if($previous_page == 'job-interest.php'){
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις > Απόρριψη Αίτησης > Λεπτομέρειες Αίτησης';
            }
            break;
        case 'job-rejection-func.php':
            if($previous_page == 'jobs-all.php'){
                $breadcrumb = 'Αρχική Σελίδα > Όλες οι Αιτήσεις > Λεπτομέρειες Αίτησης > Απόρριψη Αίτησης';
            }
            else if($previous_page == 'jobs-pending.php'){
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις > Απόρριψη Αίτησης';
            }
            else{
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις > Απόρριψη Αίτησης';
            }
            break;
        case 'job-interest.php':
            if($previous_page == 'watch-jobs-active.php'){
                $breadcrumb = 'Αρχική Σελίδα > Εκκρεμείς Αιτήσεις > Απόρριψη Αίτησης';
            }
            break;
        
        default:
            $breadcrumb = '';
    }

    //echo $previous_page. '>' .$current_page;
    echo $breadcrumb;
?>
<br>