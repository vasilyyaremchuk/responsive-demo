// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class ResponsiveItem extends Component {

  static slug = 'rede_responsive_demo';

  render() {
    return (
      <>
        <div class="rede_responsive_demo__wrapper"><iframe class="rede_responsive_demo__scaled-frame" src="{this.props.url}"></iframe></div>
      </>
    );
  }
}

export default ResponsiveItem;
