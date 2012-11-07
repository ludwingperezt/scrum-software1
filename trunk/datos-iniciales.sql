
--
-- Volcar la base de datos para la tabla `rol`
--

INSERT INTO `rol` (`nombre`, `descripcion`, `is_activated`, `created_at`, `updated_at`) VALUES
( 'Product Owner', 'product owner', 1, '2012-11-05 16:47:15', '2012-11-05 16:47:15'),
( 'Scrum master', 'Scrum master', 1, '2012-11-05 16:47:26', '2012-11-05 16:47:26'),
( 'Stakeholder', 'Stakeholder', 1, '2012-11-05 16:47:36', '2012-11-05 16:47:36'),
( 'Team', 'Team', 1, '2012-11-05 16:47:44', '2012-11-05 16:47:44');
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

