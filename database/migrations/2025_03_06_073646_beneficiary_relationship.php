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
    DB::statement("CREATE TABLE public.beneficiary_relationships
(
    id serial,
    ben_id integer,
    full_name character varying(255),
    relation_type_id smallint,
    scheme_id smallint,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
) PARTITION BY LIST (scheme_id)");

DB::statement("CREATE TABLE public.beneficiary_relationships_1 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (1)");

DB::statement("CREATE TABLE public.beneficiary_relationships_10 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (10)");
   
DB::statement("CREATE TABLE public.beneficiary_relationships_11 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (11)");
    
DB::statement("CREATE TABLE public.beneficiary_relationships_13 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (13)");
   
DB::statement("CREATE TABLE public.beneficiary_relationships_14 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (14)");
   
DB::statement("CREATE TABLE public.beneficiary_relationships_17 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (17)");
 
DB::statement("CREATE TABLE public.beneficiary_relationships_18 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (18)");
   
DB::statement("CREATE TABLE public.beneficiary_relationships_19 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (19)");
  

DB::statement("CREATE TABLE public.beneficiary_relationships_2 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (2)");
  

DB::statement("CREATE TABLE public.beneficiary_relationships_3 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (3)");
 
DB::statement("CREATE TABLE public.beneficiary_relationships_5 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (5)");



DB::statement("CREATE TABLE public.beneficiary_relationships_6 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (6)");
    


DB::statement("CREATE TABLE public.beneficiary_relationships_7 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (7)");
   


DB::statement("CREATE TABLE public.beneficiary_relationships_8 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (8)");
   


DB::statement("CREATE TABLE public.beneficiary_relationships_9 PARTITION OF public.beneficiary_relationships
    FOR VALUES IN (9)");
   
   DB::statement("ALTER TABLE public.beneficiary_relationships
   ADD CONSTRAINT fk_beneficiary_relationships_serial FOREIGN KEY (ben_id)
   REFERENCES public.beneficiary_idserials (id) MATCH SIMPLE
   ON UPDATE NO ACTION
   ON DELETE NO ACTION"); 

DB::statement("ALTER TABLE public.beneficiary_relationships
      ADD CONSTRAINT fk_beneficiary_relationships_type FOREIGN KEY (relation_type_id)
      REFERENCES public.codemasters (id) MATCH SIMPLE
      ON UPDATE NO ACTION
      ON DELETE NO ACTION"); 



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public.beneficiary_relationships');
    }
};
