namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome', 'uf', 'email'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}