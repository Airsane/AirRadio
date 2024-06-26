import React, { useEffect,useState } from 'react';
import PlayBox from '../components/PlayBox';
import { GetRadios } from '../../wailsjs/go/main/App';

import {Icon} from '../components/Icons';
import Song from '../components/Song';


export default function Home() {
  const [radio,setRadio] = useState([]);

  useEffect(() => {
    const loadRadios = async () => {
      const radios = await GetRadios()
      const formatted =radios.map((r,i)=> {
        return {
          id: i,
          title: r.name,
          artist: "",
          image: r.icon ?? "data:image/jpeg;base64,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",
          src: r.url
        }
      })
      setRadio(formatted)
    }
    loadRadios()
  }, [])
  const items =[
    {
      id: 1,
      title: 'Farketmeden',
      artist: 'Eren Yalçın',
      image: 'https://i.scdn.co/image/ab67616d00001e02e9c9fc7a8155861f8db6b28f',
      src: 'http://mp3stream4.abradio.cz/bestofrock128.mp3'
    },

    {
      id: 2,
      title: 'Uzunlar',
      artist: 'Evdeki Saat',
      image: 'https://i.scdn.co/image/ab67616d00001e02917b71d0a9aa3396f0031c40',
      src:'https://freesound.org/data/previews/617/617382_7037-lq.mp3'
    },

    {
      id: 3,
      title: 'Kan',
      artist: 'UZI',
      image: 'https://i.scdn.co/image/ab67616d00001e0267c738a703dc979f5c3c52ef',
      src:'https://freesound.org/data/previews/617/617306_5674468-lq.mp3'
    },

   {
      id: 4,
      title: 'Seni Kendime Sakladım',
      artist: 'Duman',
      image: 'https://i.scdn.co/image/ab67616d00001e02d5a587c7de8efc3ba32bede7',
      src:'https://freesound.org/data/previews/617/617305_11861866-lq.mp3'
    },

    {
      id: 5,
      title: 'Seni Dert Etmeler',
      artist: 'Madrigal',
      image: 'https://i.scdn.co/image/ab67616d00001e029aa96c06d5c346ccf6ffaf8d',
      src:'https://freesound.org/data/previews/617/617303_1015240-lq.mp3'
    },
    {
      id: 1,
      title: 'Farketmeden',
      artist: 'Eren Yalçın',
      image: 'https://i.scdn.co/image/ab67616d00001e02e9c9fc7a8155861f8db6b28f',
      src: 'http://mp3stream4.abradio.cz/bestofrock128.mp3'
    },

    {
      id: 2,
      title: 'Uzunlar',
      artist: 'Evdeki Saat',
      image: 'https://i.scdn.co/image/ab67616d00001e02917b71d0a9aa3396f0031c40',
      src:'https://freesound.org/data/previews/617/617382_7037-lq.mp3'
    },

    {
      id: 3,
      title: 'Kan',
      artist: 'UZI',
      image: 'https://i.scdn.co/image/ab67616d00001e0267c738a703dc979f5c3c52ef',
      src:'https://freesound.org/data/previews/617/617306_5674468-lq.mp3'
    },

   {
      id: 4,
      title: 'Seni Kendime Sakladım',
      artist: 'Duman',
      image: 'https://i.scdn.co/image/ab67616d00001e02d5a587c7de8efc3ba32bede7',
      src:'https://freesound.org/data/previews/617/617305_11861866-lq.mp3'
    },

    {
      id: 5,
      title: 'Seni Dert Etmeler',
      artist: 'Madrigal',
      image: 'https://i.scdn.co/image/ab67616d00001e029aa96c06d5c346ccf6ffaf8d',
      src:'https://freesound.org/data/previews/617/617303_1015240-lq.mp3'
    },

    
  ]

  return (
    <div>
        <div className='flex justify-between items-end mb-4'>
        <PlayBox title={'Radia'}/>
        </div>
        <div className='grid grid-cols-5 gap-x-6'>
                {radio.map(item => <Song item={item} key={item.id} /> )}
                
        </div>

    </div>
  )
}