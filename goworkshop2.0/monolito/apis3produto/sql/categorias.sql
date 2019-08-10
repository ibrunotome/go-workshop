--
-- PostgreSQL database dump
--

--
-- Name: categorias; Type: TABLE; Schema: public; Owner: gopher
--

CREATE TABLE public.categorias (
    codgrupoprod integer NOT NULL,
    grupoprod character varying(80) NOT NULL,
    codemp integer NOT NULL
);


ALTER TABLE public.categorias OWNER TO gopher;

--
-- Name: categorias categorias_unique; Type: CONSTRAINT; Schema: public; Owner: gopher
--

ALTER TABLE ONLY public.categorias
    ADD CONSTRAINT categorias_unique UNIQUE (codgrupoprod, grupoprod, codemp);


--
-- PostgreSQL database dump complete
--

