PGDMP         3                y         	   internPHP    13.0    13.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16395 	   internPHP    DATABASE     o   CREATE DATABASE "internPHP" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
    DROP DATABASE "internPHP";
                postgres    false            ?            1259    16398    student    TABLE     ?   CREATE TABLE public.student (
    std_id integer NOT NULL,
    std_name character varying(250),
    std_class character varying(250),
    std_score double precision
);
    DROP TABLE public.student;
       public         heap    postgres    false            ?            1259    16396    student_std_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.student_std_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.student_std_id_seq;
       public          postgres    false    201            ?           0    0    student_std_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.student_std_id_seq OWNED BY public.student.std_id;
          public          postgres    false    200            #           2604    16401    student std_id    DEFAULT     p   ALTER TABLE ONLY public.student ALTER COLUMN std_id SET DEFAULT nextval('public.student_std_id_seq'::regclass);
 =   ALTER TABLE public.student ALTER COLUMN std_id DROP DEFAULT;
       public          postgres    false    200    201    201            ?          0    16398    student 
   TABLE DATA           I   COPY public.student (std_id, std_name, std_class, std_score) FROM stdin;
    public          postgres    false    201   ?
       ?           0    0    student_std_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.student_std_id_seq', 7, true);
          public          postgres    false    200            %           2606    16406    student student_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (std_id);
 >   ALTER TABLE ONLY public.student DROP CONSTRAINT student_pkey;
       public            postgres    false    201            ?   `   x?3?,,M?K/?FƜ??%??f\F?? Q??҇???EC?8M?,??9}3?2@|c0߄ӣ?!`?e?????p?!$?8-?L??QU[p??qqq ?p?     