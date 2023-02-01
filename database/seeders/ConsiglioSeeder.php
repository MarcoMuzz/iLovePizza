<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consiglio;

/**
 * Autore: Musciacchio
 */
class ConsiglioSeeder extends Seeder
{
    public function run()
    {
        for($i=1;$i<=10;$i++){
            Consiglio::create([
                'nome' => "consiglio {$i}",
                'contenuto' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat, lacus quis semper rhoncus, ligula lectus aliquet sapien, et bibendum massa turpis id nunc. Maecenas congue, tellus vel rhoncus malesuada, velit massa fringilla quam, id facilisis odio ligula eu elit. Sed auctor, nulla a tincidunt euismod, risus nisl placerat nulla, quis malesuada risus mi at tellus. Curabitur tempor nisi euismod nisi congue, id tempor diam blandit.
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc interdum diam vel velit feugiat, vel faucibus justo rutrum. Duis lacinia pellentesque risus, et interdum dui. Aliquam suscipit euismod metus id rutrum. Proin vel congue urna. Ut molestie vel velit vel faucibus. Nam eget varius magna, id placerat nisi.
                                Etiam sollicitudin, nunc ut scelerisque tempor, lacus erat tincidunt leo, id iaculis ligula turpis non turpis. Sed varius, turpis a pharetra varius, ante erat ornare lacus, id fringilla dui justo vel dui. Integer euismod euismod laoreet. Sed id facilisis nibh. Curabitur sit amet odio vel odio porta tincidunt. Maecenas egestas, diam id bibendum ullamcorper, ipsum nisl volutpat dolor, in bibendum sapien nisi at ante.
                                Nunc id laoreet magna. Nam a elit tincidunt, rutrum nisi eu, pellentesque sapien. Integer id volutpat mi. Fusce et ante tempor, iaculis dolor vel, suscipit velit. Sed id facilisis tellus, vel tincidunt turpis. In vel velit tristique, varius eros id, condimentum metus. Nunc non congue ligula. Nunc scelerisque facilisis quam eget mollis. Sed viverra, est eu auctor bibendum, libero libero bibendum magna, ut malesuada libero nulla id urna.",
                'immagine'=> "consiglio.webp",
                'utente_id'=> rand(1,32) //
            ]);
        }
    }
}
