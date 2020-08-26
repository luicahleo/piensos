
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE usuario (
  usuario_id               int(11) auto_increment NOT NULL,
  usuario_nombre           varchar(60) CHARACTER SET utf8 NOT NULL,
  usuario_fecha            timestamp NOT NULL DEFAULT current_timestamp(),
  usuario_email            varchar(60) CHARACTER SET utf8 NOT NULL,
  usuario_password         varchar(60) CHARACTER SET utf8 NOT NULL,
  usuario_ip               varchar(60) CHARACTER SET utf8 NOT NULL,
  usuario_ultimo_login     timestamp NULL DEFAULT NULL,
  usuario_imagen           varchar(200) CHARACTER SET utf8 NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY (usuario_id),
  CONSTRAINT uq_email UNIQUE (usuario_email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


