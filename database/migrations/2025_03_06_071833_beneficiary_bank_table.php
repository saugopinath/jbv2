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
   DB::statement("CREATE TABLE public.beneficiary_banks
(
    id serial,
    ben_id integer,
    ifsc character(11),
    account_no character varying(20),
    scheme_id smallint,
    is_clean smallint default 1,
    created_at timestamp without time zone,
    updated_at timestamp without time zone
) PARTITION BY LIST (scheme_id)");

DB::statement("CREATE TABLE public.beneficiary_banks_1 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (1)
    PARTITION BY LIST (is_clean)");

DB::statement("CREATE TABLE public.beneficiary_banks_10 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (10)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_11 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (11)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_13 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (13)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_14 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (14)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_17 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (17)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_18 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (18)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_19 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (19)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_2 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (2)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_3 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (3)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_5 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (5)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_6 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (6)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_7 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (7)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_8 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (8)
    PARTITION BY LIST (is_clean)");


DB::statement("CREATE TABLE public.beneficiary_banks_9 PARTITION OF public.beneficiary_banks
    FOR VALUES IN (9)
    PARTITION BY LIST (is_clean)");

DB::statement("CREATE TABLE public.beneficiary_banks_clean_1 PARTITION OF public.beneficiary_banks_1
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_1 PARTITION OF public.beneficiary_banks_1
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_1 PARTITION OF public.beneficiary_banks_1
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_2 PARTITION OF public.beneficiary_banks_2
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_2 PARTITION OF public.beneficiary_banks_2
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_2 PARTITION OF public.beneficiary_banks_2
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_3 PARTITION OF public.beneficiary_banks_3
FOR VALUES IN ('1')");


DB::statement("CREATE TABLE public.beneficiary_banks_garbage_3 PARTITION OF public.beneficiary_banks_3
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_3 PARTITION OF public.beneficiary_banks_3
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_5 PARTITION OF public.beneficiary_banks_5
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_5 PARTITION OF public.beneficiary_banks_5
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_5 PARTITION OF public.beneficiary_banks_5
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_6 PARTITION OF public.beneficiary_banks_6
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_6 PARTITION OF public.beneficiary_banks_6
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_6 PARTITION OF public.beneficiary_banks_6
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_7 PARTITION OF public.beneficiary_banks_7
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_7 PARTITION OF public.beneficiary_banks_7
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_7 PARTITION OF public.beneficiary_banks_7
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_8 PARTITION OF public.beneficiary_banks_8
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_8 PARTITION OF public.beneficiary_banks_8
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_8 PARTITION OF public.beneficiary_banks_8
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_9 PARTITION OF public.beneficiary_banks_9
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_9 PARTITION OF public.beneficiary_banks_9
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_9 PARTITION OF public.beneficiary_banks_9
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_10 PARTITION OF public.beneficiary_banks_10
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_10 PARTITION OF public.beneficiary_banks_10
FOR VALUES IN ('2')");


DB::statement("CREATE TABLE public.beneficiary_banks_rejected_10 PARTITION OF public.beneficiary_banks_10
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_11 PARTITION OF public.beneficiary_banks_11
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_11 PARTITION OF public.beneficiary_banks_11
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_11 PARTITION OF public.beneficiary_banks_11
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_13 PARTITION OF public.beneficiary_banks_13
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_13 PARTITION OF public.beneficiary_banks_13
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_13 PARTITION OF public.beneficiary_banks_13
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_17 PARTITION OF public.beneficiary_banks_17
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_17 PARTITION OF public.beneficiary_banks_17
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_17 PARTITION OF public.beneficiary_banks_17
FOR VALUES IN ('10')");


DB::statement("CREATE TABLE public.beneficiary_banks_clean_19 PARTITION OF public.beneficiary_banks_19
FOR VALUES IN ('1')");

DB::statement("CREATE TABLE public.beneficiary_banks_garbage_19 PARTITION OF public.beneficiary_banks_19
FOR VALUES IN ('2')");

DB::statement("CREATE TABLE public.beneficiary_banks_rejected_19 PARTITION OF public.beneficiary_banks_19
FOR VALUES IN ('10')");


DB::statement("ALTER TABLE public.beneficiary_banks_clean_1
    ADD CONSTRAINT beneficiary_banks_clean_1_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_2
    ADD CONSTRAINT beneficiary_banks_clean_2_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_3
    ADD CONSTRAINT beneficiary_banks_clean_3_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_5
    ADD CONSTRAINT beneficiary_banks_clean_5_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("   
ALTER TABLE public.beneficiary_banks_clean_6
    ADD CONSTRAINT beneficiary_banks_clean_6_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_7
    ADD CONSTRAINT beneficiary_banks_clean_7_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_8
    ADD CONSTRAINT beneficiary_banks_clean_8_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_9
    ADD CONSTRAINT beneficiary_banks_clean_9_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_10
    ADD CONSTRAINT beneficiary_banks_clean_10_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_11
    ADD CONSTRAINT beneficiary_banks_clean_11_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_13
    ADD CONSTRAINT beneficiary_banks_clean_13_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_17
    ADD CONSTRAINT beneficiary_banks_clean_17_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");

DB::statement("ALTER TABLE public.beneficiary_banks_clean_19
    ADD CONSTRAINT beneficiary_banks_clean_19_pkey PRIMARY KEY (account_no, scheme_id,is_clean)");
DB::statement("ALTER TABLE public.beneficiary_banks
    ADD CONSTRAINT fk_beneficiary_banks_serial FOREIGN KEY (ben_id)
    REFERENCES public.beneficiary_idserials (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_banks
    ADD CONSTRAINT fk_beneficiary_banks_scheme FOREIGN KEY (scheme_id)
    REFERENCES public.schemes (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION");
DB::statement("ALTER TABLE public.beneficiary_banks
    ADD CONSTRAINT fk_beneficiary_banks_ifsc FOREIGN KEY (ifsc)
    REFERENCES public.ifsccodemasters (code) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION");



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public.beneficiary_banks');
    }
};
