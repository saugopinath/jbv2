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
        DB::statement("CREATE TABLE public.beneficiary_personals
(
    id serial,
    ben_id integer,
    full_name character varying(100),
    mobile_no character varying(10),
    dob date,
    caste smallint,
    created_at timestamp without time zone,
    updated_at timestamp with time zone,
    lb_application_id smallint,
    next_level_role_id smallint,
    caste_certificate_no character varying(200),
    scheme_id smallint,
    is_clean smallint default 1,
    marital_status character varying(12),
    entry_type smallint,
    ds_registration_no character varying(30),
    ds_date date,
    gender smallint,
    district_id smallint,
    block_id smallint,
    panchayat_id smallint,
    sub_division_id smallint,
    municipality_id smallint,
    ward_id smallint,
     CONSTRAINT beneficiary_personals_scheme_id_is_clean_key UNIQUE (id, scheme_id, is_clean)
) PARTITION BY LIST (scheme_id)");


DB::statement("CREATE TABLE public.beneficiary_personals_1 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (1)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_personals_10 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (10)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_11 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (11)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_13 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (13)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_14 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (14)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_17 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (17)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_18 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (18)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_19 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (19)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_2 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (2)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_3 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (3)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_5 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (5)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_6 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (6)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_7 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (7)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_8 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (8)
    PARTITION BY LIST (is_clean)");



DB::statement("CREATE TABLE public.beneficiary_personals_9 PARTITION OF public.beneficiary_personals
    FOR VALUES IN (9)
    PARTITION BY LIST (is_clean)");






DB::statement("CREATE TABLE public.beneficiary_personals_clean_1 PARTITION OF public.beneficiary_personals_1
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_1 PARTITION OF public.beneficiary_personals_1
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_1 PARTITION OF public.beneficiary_personals_1
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_2 PARTITION OF public.beneficiary_personals_2
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_2 PARTITION OF public.beneficiary_personals_2
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_2 PARTITION OF public.beneficiary_personals_2
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_3 PARTITION OF public.beneficiary_personals_3
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_3 PARTITION OF public.beneficiary_personals_3
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_3 PARTITION OF public.beneficiary_personals_3
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_5 PARTITION OF public.beneficiary_personals_5
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_5 PARTITION OF public.beneficiary_personals_5
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_5 PARTITION OF public.beneficiary_personals_5
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_6 PARTITION OF public.beneficiary_personals_6
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_6 PARTITION OF public.beneficiary_personals_6
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_6 PARTITION OF public.beneficiary_personals_6
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_7 PARTITION OF public.beneficiary_personals_7
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_7 PARTITION OF public.beneficiary_personals_7
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_7 PARTITION OF public.beneficiary_personals_7
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_8 PARTITION OF public.beneficiary_personals_8
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_8 PARTITION OF public.beneficiary_personals_8
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_8 PARTITION OF public.beneficiary_personals_8
FOR VALUES IN ('10')");




DB::statement("CREATE TABLE public.beneficiary_personals_clean_9 PARTITION OF public.beneficiary_personals_9
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_9 PARTITION OF public.beneficiary_personals_9
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_9 PARTITION OF public.beneficiary_personals_9
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_10 PARTITION OF public.beneficiary_personals_10
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_10 PARTITION OF public.beneficiary_personals_10
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_10 PARTITION OF public.beneficiary_personals_10
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_11 PARTITION OF public.beneficiary_personals_11
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_11 PARTITION OF public.beneficiary_personals_11
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_11 PARTITION OF public.beneficiary_personals_11
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_13 PARTITION OF public.beneficiary_personals_13
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_13 PARTITION OF public.beneficiary_personals_13
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_13 PARTITION OF public.beneficiary_personals_13
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_17 PARTITION OF public.beneficiary_personals_17
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_17 PARTITION OF public.beneficiary_personals_17
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_17 PARTITION OF public.beneficiary_personals_17
FOR VALUES IN ('10')");



DB::statement("CREATE TABLE public.beneficiary_personals_clean_19 PARTITION OF public.beneficiary_personals_19
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_personals_garbage_19 PARTITION OF public.beneficiary_personals_19
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_personals_rejected_19 PARTITION OF public.beneficiary_personals_19
FOR VALUES IN ('10')"); 
 DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_serial FOREIGN KEY (ben_id)
    REFERENCES public.beneficiary_idserials (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION"); 
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_district FOREIGN KEY (district_id)
     REFERENCES public.districts (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION"); 
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_subdivision FOREIGN KEY (sub_division_id)
     REFERENCES public.subdivisions (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION"); 
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_block FOREIGN KEY (block_id)
     REFERENCES public.blocks (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_panchayat FOREIGN KEY (panchayat_id)
     REFERENCES public.panchayats (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_municipality FOREIGN KEY (municipality_id)
     REFERENCES public.municipalities (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_ward FOREIGN KEY (ward_id)
     REFERENCES public.wards (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_gender FOREIGN KEY (gender)
     REFERENCES public.codemasters (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_next_level_role_id FOREIGN KEY (next_level_role_id)
     REFERENCES public.codemasters (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
 DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_caste FOREIGN KEY (caste)
     REFERENCES public.codemasters (id) MATCH SIMPLE
     ON UPDATE NO ACTION
     ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_scheme FOREIGN KEY (scheme_id)
      REFERENCES public.schemes (id) MATCH SIMPLE
      ON UPDATE NO ACTION
      ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_personals ADD CONSTRAINT fk_beneficiary_personals_entrytype FOREIGN KEY (entry_type)
      REFERENCES public.codemasters (id) MATCH SIMPLE
      ON UPDATE NO ACTION
      ON DELETE NO ACTION");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public.beneficiary_personals');
    }
};
