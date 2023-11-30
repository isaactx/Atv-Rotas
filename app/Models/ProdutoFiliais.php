namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoFiliais extends Model
{
    protected $fillable = ['filial_id', 'produto_id', 'preco_venda', 'estoque_minimo', 'estoque_maximo'];

    public function filial()
    {
        return $this->belongsTo(Filial::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}