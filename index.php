<?
require_once 'app/init.php';

use Codecouese\Filters\Filter as Filter;
use Codecouese\Model\User as User;

$filter = new Filter();
echo $filter->GetDataFromUserClass(new User());