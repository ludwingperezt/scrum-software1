
--
-- Volcar la base de datos para la tabla `rol`
--

INSERT INTO `rol` (`nombre`, `descripcion`, `is_activated`) VALUES
( 'Scrum master', 'Scrum master', 1),
( 'Product Owner', 'product owner', 1),
( 'Stakeholder', 'Stakeholder', 1),
( 'Team', 'Team', 1);
--
-- Volcar la base de datos para la tabla `estado`
--

INSERT INTO `estado` (`nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
('Listo', 'Listo para iniciarse', '2012-11-05 16:48:06', '2012-11-05 16:48:06'),
('En proceso', 'En proceso', '2012-11-05 16:48:30', '2012-11-05 16:48:30'),
('En pruebas', 'En pruebas', '2012-11-05 16:48:44', '2012-11-05 16:48:44'),
('Finalizado', 'Finalizado', '2012-11-05 16:48:57', '2012-11-05 16:48:57');

--
-- Volcar la base de datos para la tabla `persona`
--

INSERT INTO `persona` (`idfacebook`, `nombre`, `email`, `telefono`, `is_activated`, `sf_guard_user_id`, `created_at`, `updated_at`) VALUES
('1234123', 'admin', 'admin@admin.com', '12345678', 1, 1, '2012-11-07 02:52:18', '2012-11-07 02:52:21');

