<?phpmate

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutoresController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //

     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tutores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatosTutorRequest $request) {
        $i = request();
        // Inserción usando el modelo Tutor
        $tutor = Tutor::create([
                    'empresa' => $i['empresa'],
                    'documento' => $i['documento'],
                    'nombre_tutor_emp' => $i['nombre_tutor_emp'],
                    'apellido1_tutor_emp' => $i['apellido1_tutor_emp'],
                    'apellido2_tutor_emp' => $i['apellido2_tutor_emp'],
                    'pais_documento' => $i['pais_documento'],
                    'provincia' => $i['provincia'],
                    'municipio' => $i['municipio'],
                    'status' => $i['status'],
                    'telefono' => $i['telefono'],
                    'email' => $i['email']
                        //'id_emp' => $id_emp,
        ]);
        $tutor->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
