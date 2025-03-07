<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    DB::statement("CREATE TABLE public.beneficiary_identifications
(
    id serial,
    ben_id integer,
    identification_type_id smallint,
    identification_value character varying(100),
    scheme_id smallint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
) PARTITION BY LIST (scheme_id)");

DB::statement("CREATE TABLE public.beneficiary_identifications_1 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (1)");

DB::statement("CREATE TABLE public.beneficiary_identifications_10 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (10)");
   
DB::statement("CREATE TABLE public.beneficiary_identifications_11 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (11)");
    
DB::statement("CREATE TABLE public.beneficiary_identifications_13 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (13)");
   
DB::statement("CREATE TABLE public.beneficiary_identifications_14 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (14)");
   
DB::statement("CREATE TABLE public.beneficiary_identifications_17 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (17)");
 
DB::statement("CREATE TABLE public.beneficiary_identifications_18 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (18)");
   
DB::statement("CREATE TABLE public.beneficiary_identifications_19 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (19)");
  

DB::statement("CREATE TABLE public.beneficiary_identifications_2 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (2)");
  

DB::statement("CREATE TABLE public.beneficiary_identifications_3 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (3)");
 
DB::statement("CREATE TABLE public.beneficiary_identifications_5 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (5)");



DB::statement("CREATE TABLE public.beneficiary_identifications_6 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (6)");
    


DB::statement("CREATE TABLE public.beneficiary_identifications_7 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (7)");
   


DB::statement("CREATE TABLE public.beneficiary_identifications_8 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (8)");
   


DB::statement("CREATE TABLE public.beneficiary_identifications_9 PARTITION OF public.beneficiary_identifications
    FOR VALUES IN (9)");
   
   DB::statement("ALTER TABLE public.beneficiary_identifications
   ADD CONSTRAINT fk_beneficiary_identifications_serial FOREIGN KEY (ben_id)
   REFERENCES public.beneficiary_idserials (id) MATCH SIMPLE
   ON UPDATE NO ACTION
   ON DELETE NO ACTION"); 

DB::statement("ALTER TABLE public.beneficiary_identifications
      ADD CONSTRAINT fk_beneficiary_identifications_type FOREIGN KEY (identification_type_id)
      REFERENCES public.codemasters (id) MATCH SIMPLE
      ON UPDATE NO ACTION
      ON DELETE NO ACTION"); 



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public.beneficiary_identifications');
    }
};
