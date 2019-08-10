--
-- PostgreSQL database dump
--

--
-- Name: especificacao; Type: TABLE; Schema: public; Owner: gopher
--

CREATE TABLE public.especificacao (
    codprod character varying(20) NOT NULL,
    valor text NOT NULL,
    codemp integer NOT NULL,
    atributo character varying(100) NOT NULL
);


ALTER TABLE public.especificacao OWNER TO gopher;

--
-- Name: especificacao pk_especificacao; Type: CONSTRAINT; Schema: public; Owner: gopher
--

ALTER TABLE ONLY public.especificacao
    ADD CONSTRAINT pk_especificacao PRIMARY KEY (atributo, codprod, codemp);


--
-- Name: index_atributo; Type: INDEX; Schema: public; Owner: gopher
--

CREATE INDEX index_atributo ON public.especificacao USING btree (atributo) INCLUDE (atributo);


--
-- PostgreSQL database dump complete
--

