<?
switch($_GET['mytext'])
{
    case '123':
        header('Location: https://eu.jotform.com/211693791550056');
        break;
    case '124':
        header('Location: https://www.google.uk');
        break;
    default:
        print "<p>Wrong code. Try again</p>";
        include('index.html');
        break;
}
?>
