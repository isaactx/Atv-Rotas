namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso', 'preco_venda', 'estoque_minimo', 'estoque_maximo'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function produtoDetalhes()
    {
        return $this->hasOne(ProdutoDetalhes::class);
    }

    public function filiais()
    {
        return $this->belongsToMany(Filial::class, 'produto_filiais')
            ->withPivot('preco_venda', 'estoque_minimo', 'estoque_maximo')
            ->withTimestamps();
    }
}