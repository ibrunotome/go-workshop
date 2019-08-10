--
-- PostgreSQL database dump
--

--
-- Name: user; Type: TABLE; Schema: public; Owner: gopher
--
-- SELECT uuid_generate_v4();

CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
CREATE TABLE public.user (
    logi_id serial NOT NULL,
    logi_uuid uuid NOT NULL DEFAULT uuid_generate_v4(),
	logi_email character varying(200) NOT NULL,
    logi_nome character varying(200) NOT NULL,
    logi_last_name character varying(200) NOT NULL,
    logi_avatar_dominio character varying(200) NOT NULL,
    logi_senha character varying(200) NOT NULL,
    logi_avatar_type character varying(200) NOT NULL,
    logi_data_criacao date DEFAULT current_date NOT NULL,
    login_codemp integer DEFAULT 10 NOT NULL,
    ativo boolean DEFAULT true
);


ALTER TABLE public.user OWNER TO gopher;

--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: gopher
--

ALTER TABLE ONLY public.user
    ADD CONSTRAINT user_pkey PRIMARY KEY (logi_id);

--
-- Name: fki_codemp; Type: INDEX; Schema: public; Owner: gopher
--

CREATE INDEX fki_email ON public.user USING btree (logi_email);


insert into public.user(logi_email,logi_nome,logi_last_name,logi_avatar_dominio,logi_senha,logi_avatar_type) values ('jeff.otoni@s3wf.com.br', 'otoni', 'lima', '','$2y$10$D42vS4KXUESztfQ62KW98OxSEcASPKPCYSFkScAyXBKuvUx4VHe1u','');