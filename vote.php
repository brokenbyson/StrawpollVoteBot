<?php
require_once('inc/class.Strawpoll.php');
set_time_limit(0);

if($argc < 3) {
    echo "Usage: php vote.php <http://strawpoll.com/kdppx5g3> <check10> <50>\n";
}
else {
    $id     = $argv[1];
    $option = $argv[2] - 1;
    $amount = $argv[3];
    $sp = new StrawPoll();
    $votes = $sp->vote($id, $option, $amount, 'proxies.txt');
    echo 'Successfully voted ' . $votes['votes'] . '/' . $votes['total'] . ' time(s)' . "\n";

}

?>
