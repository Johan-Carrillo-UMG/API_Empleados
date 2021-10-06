using Microsoft.EntityFrameworkCore;

namespace api_empleado.Models{
    class Conexion : DbContext {
        public Conexion (DbContextOptions<Conexion> options) : base(options){}
        public DbSet<Empleados> Empleados {get;set;}
    }

    class Conectar{
        private const string cadenaConexion = "server=localhost; port=3306; database=db_empresa_2021; userid=root; pwd=admin";
        
        public static Conexion Create(){
            var constructor = new DbContextOptionsBuilder<Conexion>();
            constructor.UseMySQL(cadenaConexion);
            var cn = new Conexion (constructor.Options);
            return cn;
        }
    }
}