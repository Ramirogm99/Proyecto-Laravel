Composer update
npm install
php artisan migrate
php artisan serve


php artisan make:model modeloCentro

protected $table = "centros";
protected $primaryKey = 'id';
protected $fillable = ('nombre','updated_at', 'created_at');

php artisan make:fatory CentroFactory --model:modelCentro

use App\Models\modelCentro

protected $model = modelCentro::class