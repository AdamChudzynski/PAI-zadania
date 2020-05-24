using System;
using System.Collections;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace asp.net_mvc.Models
{
    public class Song
    {
        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name
        { get; set; }

        [Required(ErrorMessage = "Artists name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Artist
        { get; set; }

        public int GenreId
        { get; set; }

        public int Id
        { get; set; }

    }

    public class Genre
    {
        public int Id
        { get; set; }

        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name
        { get; set; }

        public ICollection<Song> Songs
        { get; set; }
    }
}