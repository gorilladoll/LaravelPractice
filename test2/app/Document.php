<!-- <?php
//26장 Document 모델
// namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    private $directory = 'docs';

    public function get($file = null){
      $file = is_null($file) ? 'readme.md' : $file;
      // var_dump($this->getPath($file));
      if(! File::exists($this->getPath($file))){
        abort(404,'File Not exist');
      }

      return File::get($this->getPath($file));
    }

    private function getPath($file){
      return base_path($this->directory . DIRECTORY_SEPARATOR . $file);
    }
}
?> -->
