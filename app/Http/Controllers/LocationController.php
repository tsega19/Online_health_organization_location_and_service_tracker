namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Model\Org;
  
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lindex(Request $request)
    {
        $lat = YOUR_CURRENT_LATTITUDE;
        $lon = YOUR_CURRENT_LONGITUDE;
           
        $users = Orgs::select("orgs.id"
                        ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
                        * cos(radians(orgs.lat)) 
                        * cos(radians(orgs.lng) - radians(" . $lng . ")) 
                        + sin(radians(" .$lat. ")) 
                        * sin(radians(users.lat))) AS distance"))
                        ->groupBy("orgs.id")
                        ->get();
        dd($orgs);
    
    }
}
