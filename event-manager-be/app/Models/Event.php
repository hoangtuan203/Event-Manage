namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Event extends Model
{
    protected $collection = 'events';
    protected $fillable = ['name', 'description', 'date', 'location'];
}