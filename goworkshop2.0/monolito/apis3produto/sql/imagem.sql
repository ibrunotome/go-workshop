--
-- PostgreSQL database dump
--

-- Dumped from database version 11.3
-- Dumped by pg_dump version 11.3

CREATE TABLE public.imagem (
    codimg integer NOT NULL,
    codemp integer NOT NULL,
    codprod integer NOT NULL,
    url character varying(300) NOT NULL,
    nome character varying(300)
);


ALTER TABLE public.imagem OWNER TO gopher;

--
-- Name: imagem_codimg_seq1; Type: SEQUENCE; Schema: public; Owner: gopher
--

CREATE SEQUENCE public.imagem_codimg_seq1
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.imagem_codimg_seq1 OWNER TO gopher;

--
-- Name: imagem_codimg_seq1; Type: SEQUENCE OWNED BY; Schema: public; Owner: gopher
--

ALTER SEQUENCE public.imagem_codimg_seq1 OWNED BY public.imagem.codimg;


--
-- Name: imagem codimg; Type: DEFAULT; Schema: public; Owner: gopher
--

ALTER TABLE ONLY public.imagem ALTER COLUMN codimg SET DEFAULT nextval('public.imagem_codimg_seq1'::regclass);


--
-- Name: imagem imagem_pkey; Type: CONSTRAINT; Schema: public; Owner: gopher
--

ALTER TABLE ONLY public.imagem
    ADD CONSTRAINT imagem_pkey PRIMARY KEY (codemp, codprod, url);


--
-- PostgreSQL database dump complete
--

