namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoDetalhe extends Model
{
    protected $fillable = ['comprimento', 'largura', 'altura'];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}