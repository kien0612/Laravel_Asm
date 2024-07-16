<?PHP
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'ten_dang_nhap', 'mat_khau', 'ho_ten', 'email', 'so_dien_thoai', 'dia_chi', 'vai_tro'
    ];

    protected $hidden = [
        'mat_khau', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['mat_khau'] = bcrypt($password);
    }
}
