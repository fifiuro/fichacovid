<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->bigIncrements('id_fic');
            /** 1. DATOS DEL ESTABLECIMIENTO NOTIFICADOR */
            $table->string('establecimiento');
            $table->string('codigo_estado');
            $table->string('red_salud');
            $table->string('departamento');
            $table->string('municipio');
            $table->date('fecha_notificacion');
            $table->string('sem_epidem');
            $table->boolean('caso_identificado');
            /** 2. IDENTIFICACION DEL CASO / PACIENTE */
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('sexo');
            $table->string('ci');
            $table->string('expedido');
            $table->date('fecha_nac');
            $table->integer('edad_paciente');
            $table->string('departamento_paciente');
            $table->string('municipio_paciente');
            $table->string('pais_paciente');
            $table->string('calle');
            $table->string('zona');
            $table->integer('num');
            $table->string('telefono_paciente');
            /** 3.ANTECEDENTES EPIDEMIOLOGICOS */
            $table->string('ocupacion');
            $table->string('otro');
            $table->boolean('vacuna_influenza');
            $table->date('fecha_vacuna');
            $table->boolean('viaje_riesgo');
            $table->string('pais_antecedentes');
            $table->string('ciudad_antecedentes');
            $table->date('fecha_retorno');
            $table->time('hora_retorno');
            $table->string('empresa_viaje');
            $table->string('num_vuelo');
            $table->string('num_asiento');
            $table->boolean('contacto');
            $table->date('fecha_contracto');
            $table->string('nombre_conacto');
            $table->string('paterno_contacto');
            $table->string('materno_contacto');
            $table->string('telefono_contacto');
            $table->string('pais_contacto');
            $table->string('departamento_contacto');
            $table->string('municipio_contacto');
            $table->string('ciudad_contacto');
            /** 4. DATOS CLINICOS */
            $table->date('fecha_inicio');
            $table->string('sintoma');
            $table->string('estado');
            $table->string('diagnostico');
            /** 5. DATOS EN CASO DE HOSPITALIZACION Y/O AISLAMIENTO */
            $table->date('fecha_aislamiento');
            $table->string('lugar_aislamiento');
            $table->date('fecha_internacion');
            $table->string('establecimiento_aislamiento');
            $table->boolean('ventilacion');
            $table->boolean('terapia_intensiva');
            $table->date('fecha_ingreso');
            /** 6.ENFERMEDADES DE BASE O CONDICIONES DE RIESGO */
            $table->boolean('presenta');
            $table->string('enfermedades');
            /** 7.DATOS DE PERSONAS CON LAS QUE EL CASO SOSPECHOSO ESTUVO ENCONTACTO */
            $table->string('nombre_sospechoso');
            $table->string('paterno_sospechoso');
            $table->string('materno_sospechoso');
            $table->string('relacion');
            $table->integer('edad_sospechoso');
            $table->string('telefono_sospechoso');
            $table->string('direccion');
            $table->date('fecha_contacto');
            $table->string('lugar_contacto');
            /** 8. LABORATORIO */
            $table->boolean('muestra');
            $table->string('lugar_muestra');
            $table->string('muestra_tomada');
            $table->string('nombre_laboratorio');
            $table->date('fecha_muestra');
            $table->date('fecha_envio');
            $table->string('responsable_muestra');
            $table->boolean('resultado_laboratorio');
            $table->date('fecha_resultado');
            /** DATOS PERSONALES QUE NOTIFICA */
            $table->string('nombre_notifica');
            $table->string('paterno_notifica');
            $table->string('materno_notifica');
            $table->string('tel_cel');
            $table->string('fecha_notifica');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha');
    }
}
